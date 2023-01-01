<?php

namespace MediEco\IliasUserOrchestratorOrbital\Core\Ports\User;

use MediEco\IliasUserOrchestratorOrbital\Core\Domain\ValueObjects;

class AdditionalUserFieldDto
{
    /**
     * @param ValueObjects\AdditionalField[] $additionalFields
     */
    private function __construct(
        public readonly ValueObjects\UserId $userId,
        public readonly ValueObjects\AdditionalField $additionalField
    ) {

    }

    /**
     * @return static
     */
    public static function new(
        ValueObjects\UserId $userId,
        ValueObjects\AdditionalField $additionalField
    ) : self {
        return new self(...get_defined_vars());
    }

}