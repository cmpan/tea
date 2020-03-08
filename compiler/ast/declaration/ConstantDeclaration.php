<?php
/**
 * This file is part of the Tea programming language project
 *
 * @author 		Benny <benny@meetdreams.com>
 * @copyright 	(c)2019 YJ Technology Ltd. [http://tealang.org]
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Tea;

interface IConstantDeclaration {}

trait IConstantDeclarationTrait
{
	use DeclarationTrait, DeferChecksTrait;

	public $modifier;

	public $value;

	public function __construct(?string $modifier, string $name, BaseType $type = null, IExpression $value = null)
	{
		if ($modifier !== null && $modifier === _PUBLIC) {
			$this->is_unit_level = true;
		}

		$this->modifier = $modifier;
		$this->name = $name;
		$this->type = $type;
		$this->value = $value;
	}
}

class ConstantDeclaration extends RootDeclaration implements IConstantDeclaration
{
	use IConstantDeclarationTrait;

	const KIND = 'constant_declaration';

	/**
	 * @var Program
	 */
	public $program;
}

class ClassConstantDeclaration extends Node implements IConstantDeclaration, IClassMemberDeclaration
{
	use IConstantDeclarationTrait;

	const KIND = 'class_constant_declaration';

	public $is_static = true;
}
