<?php

namespace App\Security;

use App\Entity\Personnage;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class PersonnageVoter extends Voter
{
    // these strings are just invented: you can use anything
    const VIEW = 'view';
    const EDIT = 'edit';

    protected function supports(string $attribute, mixed $subject): bool
    {
        // if the attribute isn't one we support, return false
        if (!in_array($attribute, [self::VIEW, self::EDIT])) {
            return false;
        }

        // only vote on `Personnage` objects
        if (!$subject instanceof Personnage) {
            return false;
        }

        return true;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            // the user must be logged in; if not, deny access
            return false;
        }

        // you know $subject is a Personnage object, thanks to `supports()`
        /** @var Personnage $Personnage */
        $Personnage = $subject;

        return match($attribute) {
            self::VIEW => $this->canView($Personnage, $user),
            self::EDIT => $this->canEdit($Personnage, $user),
            default => throw new \LogicException('This code should not be reached!')
        };
    }

    private function canView(Personnage $Personnage, User $user): bool
    {
        // if they can edit, they can view
        if ($this->canEdit($Personnage, $user)) {
            return true;
        }

        // Can't view
        return false;
    }

    private function canEdit(Personnage $Personnage, User $user): bool
    {
        // this assumes that the Personnage object has a `getIdUser()` method
        return $user === $Personnage->getUser();
    }
}