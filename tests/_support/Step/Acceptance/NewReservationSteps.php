<?php
namespace Step\Acceptance;

use Page\MainPage as First;
use Page\CreateOrEditPage as Second;

class NewReservationSteps extends \AcceptanceTester
{
    /**
     * @param $id
     * @param $number
     * @param $date
     * @param $des
     * @param $startTime
     * @throws \Exception
     * $id,$number,$date,$des,$startTime
     */
    public function Create($reservation = array())
    {
        $I=$this;
        $I->waitForElementVisible(Second::$tableIDField,2);
        $I->fillField(Second::$tableIDField,$reservation['id']);
        $I->fillField(Second::$numberOfPersonField,$reservation['number']);
        $I->fillField(Second::$dateField,$reservation['date']);
        $I->fillField(Second::$descriptionField,$reservation['des']);
        $I->fillField(Second::$startTimeField,$reservation['time']);
        $I->click(Second::$addOrEditButton);
    }

    /**
     * @param $id
     * @param $person
     * @param $startTime
     * @throws \Exception
     */
    public function Edit($id,$person, $date, $startTime)
    {
        $I=$this;
        $I->waitForElementVisible(Second::$clearHyperlink,2);
        $I->clearField(Second::$tableIDField);
        $I->fillField(Second::$tableIDField, $id);
        $I->clearField(Second::$numberOfPersonField);
        $I->fillField(Second::$numberOfPersonField, $person);
        $I->clearField(Second::$dateField);
        $I->fillField(Second::$dateField, $date);
        $I->clearField(Second::$startTimeField);
        $I->fillField(Second::$startTimeField, $startTime);
        $I->click(Second::$addOrEditButton);
    }

    /**
     * @throws \Exception
     */
    public function ClearFieldToEdit()
    {
        $I=$this;
        $I->waitForElementVisible(Second::$clearHyperlink,2);
        $I->clearField(Second::$tableIDField);
        $I->clearField(Second::$numberOfPersonField);
        $I->clearField(Second::$startTimeField);
    }

    /**
     * @throws \Exception
     */
    public function Clear($reservation = array())
    {
        $I=$this;
        $I->waitForElementVisible(Second::$tableIDField,2);
        $I->fillField(Second::$tableIDField,$reservation['id']);
        $I->fillField(Second::$numberOfPersonField,$reservation['number']);
        $I->fillField(Second::$dateField,$reservation['date']);
        $I->fillField(Second::$descriptionField,$reservation['des']);
        $I->fillField(Second::$startTimeField,$reservation['time']);
        $I->click(Second::$clearHyperlink);
    }

    /**
     * @throws \Exception
     */
    public function ErrorNotification()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$errorNotification);
    }

    /**
     * @throws \Exception
     */
    public function ErrorNotificationForTableid()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$errorNotificatonForTableId);
    }

    /**
     * @throws \Exception
     */
    public function ErrorNotificationForNumber()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$errorNotificationForNumberOfPerson);
    }

    /**
     * @throws \Exception
     */
    public function ErrorNotificationForStartTime()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$startTimeField);
    }

    /**
     * @throws \Exception
     */
    public function Notification()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$notExist);
    }

    /**
     * @throws \Exception
     */
    public function DateEmpty()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$exceptionReport);
    }

    /**
     * @throws \Exception
     */
    public function AllDataWithText()
    {
        $I = $this;
        $I->waitForElementVisible(Second::$errorValue);
    }

}