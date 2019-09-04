<?php


namespace Ling\Light_Realist\Rendering;


/**
 * The OpenAdminTableBaseRealistListRenderer class.
 */
class OpenAdminTableBaseRealistListRenderer implements RealistListRendererInterface
{


    /**
     * This property holds the data types for this instance.
     * It's an array of columnName => dataTypeIdentifier.
     * More info in the @page(open admin table protocol).
     *
     * @var array
     */
    protected $dataTypes;

    /**
     * This property holds the labels for this instance.
     * It's an array of columnName => label.
     * The label is displayed in the header columns.
     *
     * @var array
     */
    protected $labels;

    /**
     * This property holds an array of booleans representing whether or not to use the renderer widgets.
     * It's an array of widget identifier => bool.
     *
     * Note: a widget shall be registered before it can be used (unless it's hardcoded inside this class, like
     * the checkbox widget for instance).
     *
     * If a widget identifier is not found, this means false (i.e. we don't use the widget).
     *
     *
     * @var bool[]
     */
    protected $useWidgets;

    /**
     * This property holds the requestId for this instance.
     * @var string
     */
    protected $requestId;


    /**
     * Builds the OpenAdminTableBaseRealistListRenderer instance.
     */
    public function __construct()
    {
        $this->dataTypes = [];
        $this->labels = [];
        $this->useWidgets = [
            "checkbox" => true,
            "table" => true,
            "head" => true,
            "order" => true,
        ];
        $this->requestId = null;
    }

    /**
     * @implementation
     */
    public function prepareByRequestDeclaration(string $requestId, array $requestDeclaration)
    {

        $this->setRequestId($requestId);

        $rendering = $requestDeclaration['rendering'] ?? [];
        $labels = $rendering['column_labels'] ?? [];
        $this->setLabels($labels);

        $openAdminTable = $rendering['open_admin_table'] ?? [];
        $dataTypes = $openAdminTable['data_types'] ?? [];
        $this->setDataTypes($dataTypes);


        $widgetStatuses = $openAdminTable['widget_statuses'] ?? [];
        $this->setWidgetStatuses($widgetStatuses);
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Sets the data types.
     *
     * @param array $array
     */
    public function setDataTypes(array $array)
    {
        $this->dataTypes = $array;
    }


    /**
     * Sets the labels.
     * @param array $labels
     */
    public function setLabels(array $labels)
    {
        $this->labels = $labels;
    }


    /**
     * Sets the widget statuses.
     * It's an array of widgetName => bool (whether this widget should be used)
     *
     * @param array $widgetStatuses
     */
    public function setWidgetStatuses(array $widgetStatuses)
    {
        $this->useWidgets = array_replace($this->useWidgets, $widgetStatuses);
    }

    /**
     * Sets the requestId.
     *
     * @param string $requestId
     */
    public function setRequestId(string $requestId)
    {
        $this->requestId = $requestId;
    }





    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Returns the data type of the column.
     * If the data type is not defined, "string" is returned.
     *
     * @param string $columnName
     * @return string
     */
    protected function getDataType(string $columnName): string
    {
        if (array_key_exists($columnName, $this->dataTypes)) {
            return $this->dataTypes[$columnName];
        }
        return "string";
    }


    /**
     * Returns whether the widget identified by $identifier is enabled.
     *
     * @param string $identifier
     * @return bool
     */
    protected function isWidgetEnabled(string $identifier): bool
    {
        return (array_key_exists($identifier, $this->useWidgets) && true === $this->useWidgets[$identifier]);
    }

}