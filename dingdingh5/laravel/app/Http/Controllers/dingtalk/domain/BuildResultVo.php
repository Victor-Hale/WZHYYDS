<?php

/**
 * 返回内容
 * @author auto create
 */
class BuildResultVo
{
	
	/** 
	 * 构建记录ID
	 **/
	public $build_id;
	
	/** 
	 * 构建信息
	 **/
	public $build_info;
	
	/** 
	 * 是否完成
	 **/
	public $finished;
	
	/** 
	 * 日志地址
	 **/
	public $log_url;
	
	/** 
	 * 结果地址
	 **/
	public $result_url;
	
	/** 
	 * 支付宝构建状态
	 **/
	public $status;
	
	/** 
	 * 构建任务ID
	 **/
	public $task_id;
	
	/** 
	 * 版本号
	 **/
	public $version;
	
	/** 
	 * 版本号是否已创建
	 **/
	public $version_created;	
}
?>