<?php
    function insertContact($db, $contact)
    {
        $agenda = $db->contacto;
        $agenda->insertOne($contact);
    }

    function getAllContacts($db)
    {
        $agenda = $db->contacto->find();

        foreach($agenda as $contact)
            $contacts[] = $contact;
        return $contacts;
    }

    function getContactAtType($db, $type, $data)
    {
        $result = $db->contacto->findOne([$type => $data]);
        foreach($result as $r)
            $contacts[] = $r;
        return $contacts;
    }
?>