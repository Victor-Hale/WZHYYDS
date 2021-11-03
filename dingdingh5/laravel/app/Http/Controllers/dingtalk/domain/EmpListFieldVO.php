<?php

/**
 * 分组下明细（非明细分组仅一条明细）
 * @author auto create
 */
class EmpListFieldVo
{
	
	/** 
	 * 明细下标（注意：当传入该值时，表示当前传入的section为编辑员工花名册现有的第oldIndex条明细，此时系统会只编辑该条明细中传入的字段；当不传入该值时，表示传入的是新增明细，此时系统会保存该条明细传入的字段，未传字段会清空）
	 **/
	public $old_index;
	
	/** 
	 * 分组下字段列表
	 **/
	public $section;	
}
?>