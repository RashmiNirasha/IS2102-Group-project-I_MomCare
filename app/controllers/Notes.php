<?php

class Notes extends BaseController
{

    public function __construct()
    {
        $this->NotesModel = $this->model('Notes');
    }

    public function index()
    {
        $Notes = $this->NotesModel->getNotes(); 
        //view pass data values $data

        $data = [
            
            'Notes' => $Notes,
            // 'formAction' => 'Notess/addNotes'
            
        ];

        $this->view('users/addNotes', $data);
    }
    
    public function addNotes()
    {
        
        
        // Check if POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
            $data = [
                'doc_id' => trim($_POST['doc_id']),
                'mom_id' => trim($_POST['mom_id']),
                'note_topic' => trim($_POST['note_topic']),
                'note_date' => trim($_POST['note_date']),
                'note_description' => trim($_POST['note_description']),
                'note_records' => trim($_POST['note_records']),

            ];

            //Execute
            if ($this->NotesModel->addNotes($data)) { 
                
                redirect('Notes');
        
            } else {
                die('Something went wrong');
            }
        } else {
            
            // Init data
            $data = [
                'doc_id' => 'doc_id',
                'mom_id' => 'mom_id',
                'note_topic' => 'note_topic',
                'note_date' => 'note_date',
                'note_description' => 'note_description',
                'note_records' => 'note_records',
                'formAction' => 'Notes/addNotes'
            ];

            // Load View
            $this->view('users/addNotes', $data);
        }
    }

    public function showNotes($ped_note_id)
    {

        $Notes = $this->NotesModel->showNotesById($ped_note_id);

        $data = [
            'mom_id' => $Notes->mom_id,
            'note_topic' => $Notes->note_topic,
            'note_date' => $Notes->note_date,
            'note_description' => $Notes->note_description,
            'note_records' => $Notes->note_records,
            'formAction' => 'Notes/updateNotes/'.$Notes->ped_note_id
        ];
       
        $this->view('users/addNotes', $data);

        // $data = [
        //     'className'=> 'selectedTab',
        //     'title' => 'Notess',
        //     'position' => $Notes->position,
        //     'job_description' =>$Notes->job_description,
        //     'requirements' => $Notes->requirements,
        //     'no_of_interns' => $Notes->intern_count,
        //     'working_mode' => $Notes->working_mode,
        //     'required_year' => $Notes->applicable_year,
        //     'internship_start' => $Notes->start_date,
        //     'internship_end' => $Notes->end_date,
        //     'formAction' => 'Notess/update-Notes/'.$Notes->Notes_id
        // ];

        // $this->view('company/addNotes', $data);
    }

    public function updateNotes($NotesId)
    {
                // // Check if POST
                // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
                //     // Sanitize POST
                //     $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
                //     $data = [
                //         'position' => trim($_POST['position']),
                //         'job_description' => trim($_POST['job_description']),
                //         'requirements' => trim($_POST['requirements']),
                //         'internship_start' => date('y-m-d',strtotime($_POST['internship_start'])),
                //         'internship_end' => date('y-m-d',strtotime($_POST['internship_end'])),
                //         'no_of_interns' => trim($_POST['no_of_interns']),
                //         'working_mode' => trim($_POST['working_mode']),
                //         'required_year' => trim($_POST['required_year']),
                //         'Notes_id' => $NotesId
                //     ];
        
                //     //Execute
                //     if ($this->NotesModel->updateNotes($data)) { 
                        
                //         // Redirect
                //         redirect('Notess');
                //     } else {
                //         die('Something went wrong');
                //     }
                // } else {
                    
                //     // Init data
                //     $data = [
                //         'name' => '',
                //         'buttonName' =>'Add Job Role'
                //     ];
        
                //     // Load View
                //     $this->view('company/add-Notes', $data);
                // }
    }

    public function deleteNotes($NotesId)
    {
        // $this->NotesModel->deleteNotes($NotesId);
    }
}


