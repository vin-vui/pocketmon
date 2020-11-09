<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Expense;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Expenses extends Component
{
    use WithPagination;

    public $label, $cost, $expense_id, $user_id;
    public $isOpen = 0;

    public $search;

    public $readyToLoad = false;

    public function loadExpenses()
    {
        $this->readyToLoad = true;
    }

    // public function paginationView()
    // {
    //     return 'custom-pagination';
    // }

    protected $queryString = ['search'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $query_expense = Expense::where('label', 'like', '%'.$this->search.'%')->latest();

        return view('livewire.expenses.expenses', [
            'total_expenses' => $query_expense->sum('cost'),
            'number_expenses' => $query_expense->count(),
            'expenses' => $query_expense->paginate(10)
        ])
            ->layout('layouts.app', ['header' => __('expense.expenses')]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->label = '';
        $this->cost = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'label' => 'required',
            'cost' => 'required',
        ]);

        Expense::updateOrCreate(['id' => $this->expense_id], [
            'label' => $this->label,
            'cost' => $this->cost,
            'user_id' => Auth::id(),
        ]);

        session()->flash('green_message',
            $this->expense_id ? 'Blog Updated Successfully.' : 'Blog Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        $this->expense_id = $id;
        $this->label = $expense->label;
        $this->cost = $expense->cost;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Expense::find($id)->delete();
        session()->flash('red_message', 'Blog Deleted Successfully.');
    }
}
