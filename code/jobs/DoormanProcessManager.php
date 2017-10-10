<?php

if (class_exists('AsyncPHP\Doorman\Manager\ProcessManager')) {

class DoormanProcessManager extends AsyncPHP\Doorman\Manager\ProcessManager
{
	/**
	 * @inheritdoc
	 *
	 * @return string
	 */
	public function getWorker() {
		return BASE_PATH . "/framework/cli-script.php dev/tasks/ProcessJobQueueChildTask";
	}
}

}
