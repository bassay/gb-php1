<?php
// TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче комментарий пользователя.

class TaskService {
  public function addComment(User $author, Task $task, string $text){
      $task->setComment(new Comment($author, $task, $text));
  }
}