<?php
/**
 * This file is part of the Tea programming language project
 *
 * @author 		Benny <benny@meetdreams.com>
 * @copyright 	(c)2019 YJ Technology Ltd. [http://tealang.org]
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Tea;

class ASTHelper
{
	static function create_symbol_this(ClassLikeIdentifier $class)
	{
		$declaration = new VariableDeclaration(_THIS, $class, null, null);
		return new Symbol($declaration);
	}

	static function create_symbol_super(ClassLikeIdentifier $class)
	{
		$declaration = new VariableDeclaration(_SUPER, $class, null, null);
		return new Symbol($declaration);
	}

	static function create_variable_identifier(VariableDeclaration $declaration)
	{
		$symbol = new Symbol($declaration);
		$identifier = VariableIdentifier::create_with_symbol($symbol);

		return $identifier;
	}
}
