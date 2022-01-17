<?php

namespace App\Http\Livewire\Admin;


use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateProduct extends Component
{
    public $categories, $subcategories = [];
    public $category_id = "", $subcategory_id = "";
    public $name, $slug, $description, $measure, $size;

    protected $rules = [
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'name' => 'required',
        'slug' => 'required|unique:products',
        'description' => 'required',
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function updatedCategoryId($value)
    {
        $this->subcategories = Subcategory::where('category_id', $value)->get();
        $this->reset(['subcategory_id']);
    }

    public function getSubcategoryProperty()
    {
        return Subcategory::find($this->subcategory_id);
    }

    public function save()
    {
        $this->validate();

        $product = new Product();

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->category_id = $this->category_id;
        $product->subcategory_id = $this->subcategory_id;
        $product->measure = $this->measure;
        $product->size = $this->size;

        $product->save();

        return redirect()->route('admin.products.edit', $product);
    }

    public function render()
    {
        return view('livewire.admin.create-product')->layout('layouts.admin');
    }
}
