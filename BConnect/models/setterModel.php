<?php

public function setFullName($fullName) {
     $this->updateField('FullName', $fullName);
 }

 public function setEmail($email) {
     $this->updateField('Email', $email);
 }

 public function setPasswordHash($passwordHash) {
     $this->updateField('PasswordHash', $passwordHash);
 }

 public function setGender($gender) {
     $this->updateField('Gender', $gender);
 }

 public function setProfilePhotoURL($profilePhotoURL) {
     $this->updateField('ProfilePhotoURL', $profilePhotoURL);
 }

 public function setCity($city) {
     $this->updateField('City', $city);
 }

 public function setPhoneNumber($phoneNumber) {
     $this->updateField('PhoneNumber', $phoneNumber);
 }

 public function setPrivacySettings($privacySettings) {
     $this->updateField('PrivacySettings', $privacySettings);
 }

 public function setAccountStatus($accountStatus) {
     $this->updateField('AccountStatus', $accountStatus);
 }

 public function setLastLogin($lastLogin) {
     $this->updateField('LastLogin', $lastLogin);
 }

 public function setOnlineStatus($onlineStatus) {
     $this->updateField('OnlineStatus', $onlineStatus);
 }

 public function setFollowerCount($followerCount) {
     $this->updateField('FollowerCount', $followerCount);
 }

 public function setFollowingCount($followingCount) {
     $this->updateField('FollowingCount', $followingCount);
 }

 public function setVerificationStatus($verificationStatus) {
     $this->updateField('VerificationStatus', $verificationStatus);
 }

 public function setNotificationSettings($notificationSettings) {
     $this->updateField('NotificationSettings', $notificationSettings);
 }

 public function setBlockedUsers($blockedUsers) {
     $this->updateField('BlockedUsers', $blockedUsers);
 }

 public function setCreatedAt($createdAt) {
     $this->updateField('CreatedAt', $createdAt);
 }

 public function setUpdatedAt($updatedAt) {
     $this->updateField('UpdatedAt', $updatedAt);
 }

 public function setBiography($biography) {
     $this->updateField('Biography', $biography);
 }
