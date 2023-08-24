/* En quête de connaissances et passionné d'informatique, je suis BAH Mamadou, étudiant en Licence 2 Mathématiques Informatique à Lyon 1. La programmation est ma toile, et chaque ligne de code est un coup de pinceau qui crée des solutions et donne vie à des idées. */
/* En quête de connaissances et passionné d'informatique, je suis BAH Mamadou, étudiant en Licence 2 Mathématiques Informatique à Lyon 1. La programmation est ma toile, et chaque ligne de code est un coup de pinceau qui crée des solutions et donne vie à des idées. */
<?php

class Feed {
  private int $id;
  private string $full_name;
  private string $profilePicture;
  private string $duration;
  private string $location;
  private string $picture;
  private array $likedBy;
  private array $userLiked;
  private string $description;
  private string $harshTag;
  private string $titleLegend;

  public function __construct(
    int $id,
    string $titleLegend,
    string $full_name,
    string $profilePicture,
    string $duration,
    string $location,
    string $picture,
    array $likedBy,
    array $userLiked,
    string $description,
    string $harshTag
  ) {
    $this->id = $id;
    $this->full_name = $full_name;
    $this->profilePicture = $profilePicture;
    $this->duration = $duration;
    $this->location = $location;
    $this->picture = $picture;
    $this->likedBy = $likedBy;
    $this->userLiked = $userLiked;
    $this->description = $description;
    $this->harshTag = $harshTag;
    $this->titleLegend = $titleLegend;
  }

  public function getId(): int {
    return $this->id;
  }

  public function setId(int $id): void {
    $this->id = $id;
  }

  public function getFullName(): string {
    return $this->full_name;
  }

  public function setFullName(string $full_name): void {
    $this->full_name = $full_name;
  }

  public function getTitleLegend(): string {
    return $this->titleLegend;
  }

  public function setTitleLegende(string $titleLegend): void {
    $this->titleLegend = $titleLegend;
  }

  public function getProfilePicture(): string {
    return $this->profilePicture;
  }

  public function setProfilePicture(string $profilePicture): void {
    $this->profilePicture = $profilePicture;
  }

  public function getDuration(): string {
    return $this->duration;
  }

  public function setDuration(string $duration): void {
    $this->duration = $duration;
  }

  public function getLocation(): string {
    return $this->location;
  }

  public function setLocation(string $location): void {
    $this->location = $location;
  }

  public function getPicture(): string {
    return $this->picture;
  }

  public function setPicture(string $picture): void {
    $this->picture = $picture;
  }

  public function getLikedBy(): array {
    return $this->likedBy;
  }

  public function setLikedBy(array $likedBy): void {
    $this->likedBy = $likedBy;
  }

  public function getUserLiked(): array {
    return $this->userLiked;
  }

  public function setUserLiked(array $userLiked): void {
    $this->userLiked = $userLiked;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function setDescription(string $description): void {
    $this->description = $description;
  }

  public function getHarshTag(): string {
    return $this->harshTag;
  }

  public function setHarshTag(string $harshTag): void {
    $this->harshTag = $harshTag;
  }
}
