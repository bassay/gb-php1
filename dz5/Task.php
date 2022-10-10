<?php
//$task = new Task();
//$task->setDescription("Мое описание");
//$task->setPriority(5);
//
//echo "<pre>";
//var_dump($task);
//echo "</pre>";

class Task {
  private string $description;
  private DateTime $dateCreated;
  private ?DateTime $dateUpdated;
  private ?DateTime $dateDone;
  private int $priority;
  private bool $isDone = false;
  private User $user;

  // Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters).

  public function __construct(){
    $this->dateCreated = new DateTime();
  }

  public function getDescription(): string {
    return $this->description;
  }

  // При вызове метода setDescription обновляйте значение свойства dateUpdated.
  public function setDescription(string $description): void {
    $this->description = $description;
    $this->setDateUpdated(new DateTime());
  }

  // Разработайте метод markAsDone, помечающий задачу выполненной, а также
  // обновляющий свойства dateUpdated и dateDone.
  public function markAsDone(): void {
    $this->setIsDone();
    $this->setDateUpdated(new DateTime());
    $this->setDateDone(new DateTime());
  }

  public function getDateCreated(): DateTime {
    return $this->dateCreated;
  }

  public function getDateUpdated(): DateTime {
    return $this->dateUpdated;
  }
  public function setDateUpdated(DateTime $dateUpdated): void {
    $this->dateUpdated = $dateUpdated;
  }

  public function getDateDone(): DateTime {
    return $this->dateDone;
  }
  public function setDateDone(DateTime $dateDone): void {
    $this->dateDone = $dateDone;
  }

  public function getPriority(): int {
    return $this->priority;
  }
  public function setPriority(int $priority): void {
    $this->priority = $priority;
  }

  public function isDone(): bool {
    return $this->isDone;
  }
  private function setIsDone(): void {
    $this->isDone = true;
  }

  public function getUser(): User {
    return $this->user;
  }
  public function setUser(User $user): void {
    $this->user = $user;
  }

}