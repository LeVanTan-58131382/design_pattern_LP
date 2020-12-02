<?php
require_once "Post.php";
require_once "PostId.php";
require_once "PostStatus.php";
require_once "PostRepository.php";
require_once "Persistence.php";
require_once "InMemoryPersistence.php";
require_once "PostRepositoryTest.php";
$postRepositoryTest = new PostRepositoryTest();
$postRepositoryTest->testCanGenerateId();
$postRepositoryTest->testCanPersistPostDraft();
$postRepositoryTest->testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist();