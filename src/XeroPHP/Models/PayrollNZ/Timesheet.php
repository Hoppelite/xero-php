<?php

namespace XeroPHP\Models\PayrollNZ;

use XeroPHP\Remote;
use XeroPHP\Models\PayrollNZ\Timesheet\TimesheetLine;

class Timesheet extends Remote\Model
{
    /**
     * The Xero identifier for an employee
     *
     * @property string EmployeeID
     */
    
     /**
     * The Xero identifier for a payroll calendar
     *
     * @property string PayrollCalendarID
     */

    /**
     * Period start date (YYYY-MM-DD)
     *
     * @property \DateTimeInterface StartDate
     */

    /**
     * Period end date (YYYY-MM-DD)
     *
     * @property \DateTimeInterface EndDate
     */

    /**
     * Updated Date
     *
     * @property \DateTimeInterface UpdatedDateUTC
     */

    /**
     * See TimesheetLines
     *
     * @property TimesheetLine[] TimesheetLines
     */

    /**
     * See Timesheet Status Codes
     *
     * @property string Status
     */

    /**
     * Timesheet total hours
     *
     * @property string TotalHours
     */

    /**
     * The Xero identifier for a Payroll Timesheet
     *
     * @property string TimesheetID
     */


    const STATUS_DRAFT = 'DRAFT';
    const STATUS_PROCESSED = 'PROCESSED';
    const STATUS_APPROVED = 'APPROVED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Timesheets';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Timesheet';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'TimesheetID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_PAYROLL;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_GET
        ];
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'TimesheetID' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'PayrollCalendarID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'TimesheetLines' => [false, self::PROPERTY_TYPE_OBJECT, 'PayrollNZ\\Timesheet\\TimesheetLine', true, false],
            'EmployeeID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'StartDate' => [true, self::PROPERTY_TYPE_DATE,'\\DateTimeInterface', false, false],
            'EndDate' => [true, self::PROPERTY_TYPE_DATE,'\\DateTimeInterface', false, false],
            'Status' => [false, self::PROPERTY_TYPE_ENUM, null, false, false],
            'TotalHours' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'UpdatedDateUTC' => [false, self::PROPERTY_TYPE_DATE, null, false, false]
        ];
    }

    public static function isPageable()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getEmployeeID()
    {
        return $this->_data['EmployeeID'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setEmployeeID($value)
    {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->_data['StartDate'];
    }

    /**
     * @param \DateTimeInterface $value
     * @return Timesheet
     */
    public function setStartDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('StartDate', $value);
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->_data['EndDate'];
    }

    /**
     * @param \DateTimeInterface $value
     * @return Timesheet
     */
    public function setEndDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('EndDate', $value);
        $this->_data['EndDate'] = $value;
        return $this;
    }

    /**
     * @return TimesheetLine[]|Remote\Collection
     * Always returns a collection, switch is for type hinting
     */
    public function getTimesheetLines()
    {
        return $this->_data['TimesheetLines'];
    }

    /**
     * @param TimesheetLine $value
     * @return Timesheet
     */
    public function addTimesheetLine(TimesheetLine $value)
    {
        $this->propertyUpdated('TimesheetLines', $value);
        if (!isset($this->_data['TimesheetLines'])) {
            $this->_data['TimesheetLines'] = new Remote\Collection();
        }
        $this->_data['TimesheetLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_data['Status'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setStatus($value)
    {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotalHours()
    {
        return $this->_data['TotalHours'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setTotalHours($value)
    {
        $this->propertyUpdated('TotalHours', $value);
        $this->_data['TotalHours'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimesheetID()
    {
        return $this->_data['TimesheetID'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setTimesheetID($value)
    {
        $this->propertyUpdated('TimesheetID', $value);
        $this->_data['TimesheetID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayrollCalendarID()
    {
        return $this->_data['PayrollCalendarID'];
    }

    /**
     * @param string $value
     * @return Timesheet
     */
    public function setPayrollCalendarID($value)
    {
        $this->propertyUpdated('PayrollCalendarID', $value);
        $this->_data['PayrollCalendarID'] = $value;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedDateUTC()
    {
        return $this->_data['UpdatedDateUTC'];
    }

    /**
     * @param \DateTimeInterface $value
     * @return Timesheet
     */
    public function setUpdatedDateUTC(\DateTimeInterface $value)
    {
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }
}
