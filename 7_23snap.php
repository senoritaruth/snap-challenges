<?php
/**
 * create a class snap challenge
 *
 * @author Ruth Dove
 *
 **/

class snapprofile {
	use ValidateUuid;
/**
* id for this profile
*
* @var string $profileId
**/
private $profileId;

/**
*
* first name for this profile
*
* @var string $profileFirstName
**/
private $profileFirstName;

/**
*
* last name for ths profile
*
* @var string $profileLastName
**/
private $profileLastName;

/**
*
* avatar for this profile
*
* @var string $profileAvatar
*
**/
private $profileAvatar;

/**
*
* bio section for this profile
*
* @var $profileBio
*
**/
private $profileBio;

/**
*
* mutator method for profileId
* @param Uuid| string $newprofileId value of new profile id
*
**/
public function setprofileId($newprofileId): void {
	try {
		$uuid = self::validateUuid($newprofileId);
			};
}

/**
 *
 */