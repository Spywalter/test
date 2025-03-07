<?php

namespace App\Livewire;

use App\Models\Todo;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
Use Livewire\WithPagination;

class Crud extends Component
{

    use WithPagination;
    #[Validate('required')]
    public $task;
     #[Validate('required')]
    public $date;

    public $edittingID;
    public $edittingTask;
    public $edittingDate;



    public function create(){

        $this->validate();
        Todo::create([

            'task'=>$this->task,
            'date'=>$this->date,
          
        ]);
        $this->reset();
        session()->flash("success","Successfully created.");
        $this->redirect("/crud");

        
    }
    public function edit($id){

        $this->edittingID = Todo::find($id)->id;

        $this->edittingTask = Todo::find($id)->task;
        $this->edittingDate = Todo::find($id)->date;

       
        
        

    }

    public function update(){


        Todo::find($this->edittingID)->update([

                'task'=>$this->edittingTask,
                'date'=>$this->edittingDate,

        ]);
        $this->reset();
        session()->flash("update","Successfully updated!");
        $this->redirect("/crud");

    }
    public function cancel(){



        $this->reset("task","date");
        $this->redirect("/crud");
    }

    public function delete($id){


        Todo::find($id)->delete();
        $this->reset("task","date");

        session()->flash("deleted","Deleted Successfully!");
        $this->redirect("/crud");

    }


    public function render()
    {
        return view('livewire.crud',[

            'todos'=>Todo::simplePaginate(5)

        ]);
    }
}