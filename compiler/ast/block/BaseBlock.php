<?php
/**
 * This file is part of the Tea programming language project
 *
 * @author 		Benny <benny@meetdreams.com>
 * @copyright 	(c)2019 YJ Technology Ltd. [http://tealang.org]
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Tea;

interface IBlock {}

trait IBlockTrait {
	/**
	 * @var IStatement[] or BaseExpression
	 */
	public $body;

	public $symbols = [];

	public $super_block;

	public function set_body_with_statements(IStatement ...$statements)
	{
		$this->body = $statements;
	}
}

class ControlBlock extends BaseStatement implements IBlock {
	use IBlockTrait;
}
