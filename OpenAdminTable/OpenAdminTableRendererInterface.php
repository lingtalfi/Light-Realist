<?php


namespace Ling\Light_Realist\OpenAdminTable;

/**
 * The OpenAdminTableRendererInterface interface.
 * An instance of this class must implement the concepts explained in
 * the @page(openAdminTable protocol).
 *
 */
interface OpenAdminTableRendererInterface
{

    /**
     * Sets the data types of the rows.
     * More about data types in the @page(open admin table protocol).
     *
     * It's an array of columnName => typeIdentifier.
     *
     *
     *
     * @param array $array
     * @return mixed
     */
    public function setDataTypes(array $array);
}