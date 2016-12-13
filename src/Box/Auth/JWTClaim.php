<?php

namespace Box\Auth;

use Box\Enums\BoxAccessPoints;

class JWTClaim
{
    public function __construct($options)
    {
        $this->aud = BoxAccessPoints::OAUTH2_TOKEN;
        foreach ($options as $key => $value) {
            $this->$key = $value;
        }
    }

    public function toArray()
    {
        // Can do this since it has only public properties.
        // Should move to reflection class logic if any public or private properties are added to `this`.
        return (array)$this;
    }
}
