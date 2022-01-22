<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class Pages extends Component
{
    public $modalFormVisible = true;
    public $slug;
    public $title;
    public $content;

    public function create()
    {
        Page::create($this->modalData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }

    /**
     * shows form modal for
     * the create modal
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }

    /**
     * data for model is mapped in this
     * component
     *
     * @return void
     */
    public function modalData()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
        ];
    }

    public function resetVars()
    {
        $this->title = null;
        $this->slug = null;
        $this->content = null;
    }
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.pages');
    }
}
