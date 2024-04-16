<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CreateReminderRequest;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CreateReminderRequest\payload\recurrenceRule;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example 提醒内容
     *
     * @var string
     */
    public $content;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDebug;

    /**
     * @var recurrenceRule
     */
    public $recurrenceRule;
    protected $_name = [
        'content'        => 'Content',
        'isDebug'        => 'IsDebug',
        'recurrenceRule' => 'RecurrenceRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->isDebug) {
            $res['IsDebug'] = $this->isDebug;
        }
        if (null !== $this->recurrenceRule) {
            $res['RecurrenceRule'] = null !== $this->recurrenceRule ? $this->recurrenceRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['IsDebug'])) {
            $model->isDebug = $map['IsDebug'];
        }
        if (isset($map['RecurrenceRule'])) {
            $model->recurrenceRule = recurrenceRule::fromMap($map['RecurrenceRule']);
        }

        return $model;
    }
}
