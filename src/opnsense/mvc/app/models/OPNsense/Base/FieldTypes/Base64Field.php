<?php
/**
 *    Copyright (C) 2015 Deciso B.V.
 *    Copyright (C) 2018 Fabian Franz
 *
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 *
 */
namespace OPNsense\Base\FieldTypes;

use Phalcon\Validation\Validator\Regex;
use \OPNsense\Base\Validators\Base64Validator;
use Phalcon\Validation\Validator\PresenceOf;

/**
 * Class Base64Field
 * @package OPNsense\Base\FieldTypes
 */
class Base64Field extends BaseField
{
    /**
     * @var bool marks if this is a data node or a container
     */
    protected $internalIsContainer = false;

    /**
     * @var string default validation message string
     */
    protected $internalValidationMessage = "Base64 validation error";

    /**
     * retrieve field validators for this field type
     * @return array returns Base64 validator
     */
    public function getValidators()
    {
        $validators = parent::getValidators();
        if ($this->internalValue != null) {
            if ($this->internalValue != null) {
                $validators[] = new Base64Validator(array('message' => $this->internalValidationMessage));
            }
        }
        return $validators;
    }
}
