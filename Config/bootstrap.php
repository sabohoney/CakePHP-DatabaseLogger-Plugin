<?php
/**
 * Configures default file logging options
 */
	App::uses('CakeLog', 'Log');
	CakeLog::config('debug', [
		'engine' => 'DatabaseLogger.DatabaseLog',
		'types' => ['notice', 'info', 'debug'],
	]);
	CakeLog::config('error', [
		'engine' => 'DatabaseLogger.DatabaseLog',
		'types' => ['warning', 'error', 'critical', 'alert', 'emergency'],
	]);
	CakeLog::config('update', [
		'engine' => 'DatabaseLogger.DatabaseLog',
		'types' => ['update'],
	]);
