<?php

class StudentHandler
{
    public function getList(){
        $client = new MongoDB\Client('mongodb://localhost:27017');
        $collection - $client->$local->students;
        $records = $collection->find();
        $data=[];

        foreach($records as $item){
            array_push($data, $item);
        }
        return $data;
}

    public function insert(){
    $client = new MongoDB\Client();
    $collection = $client->local->students;
    $insertManyResult = $collection->insertMany();
    // printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
    // var_dump($insertManyResult->getInsertedIds());

}

    public function update(){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection - $client->$local->students;
    $updateResult = $collection->updateOne();
    // printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
    // printf("Modified %d document(s)\n", $updateResult->getModifiedCount());

}

    public function delete(){
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $collection = $client->local->students;
    $deleteResult = $collection->deleteOne(); 
        
}

}