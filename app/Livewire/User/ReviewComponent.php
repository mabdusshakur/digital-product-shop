<?php

namespace App\Livewire\User;

use App\Models\Review;
use Livewire\Component;

class ReviewComponent extends Component
{
    public $user;
    public $rating, $review;
    public function mount()
    {
        $this->user = auth()->user();
    }
    public function updateReview($id)
    {
        $validatedData = $this->validate([
            'rating' => 'required',
            'review' => 'required',
        ]);

        if (!$validatedData) {
            foreach ($validatedData as $key => $value) {
                if ($value) {
                    $errors[$key] = $value;
                }
            }
            foreach ($errors as $key => $value) {
                $this->addError($key, $value);
            }
        }

        $review = Review::find($id);
        $review->rating = $this->rating;
        $review->review = $this->review;
        if ($review->save()) {
            session()->flash('success', 'Review has been updated successfully!');
        } else {
            session()->flash('error', 'Something went wrong!');
        }
    }
    public function render()
    {
        return view('livewire.user.review-component');
    }
}
