<?php
class QuestionEntity
{
    protected $id;
    protected $description;
    protected $correctAnswer;
    /**
     * Accept an array of data matching properties of this class
     * and create the class
     *
     * @param array $data The data to use to create
     */
    public function __construct(array $data) {
        // no id if we're creating
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->description = $data['description'];
        $this->correctAnswer = $data['correctAnswer'];
    }
    public function getId() {
        return $this->id;
    }
    public function getDescription() {
        return $this->description;
    }

    public function getCorrectAnswer() {
        return $this->correctAnswer;
    }
}