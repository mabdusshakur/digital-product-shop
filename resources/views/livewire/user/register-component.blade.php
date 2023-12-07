<div>
    <section class="login account footer-padding">
        <div class="container">
            @include('livewire.user.partials._alerts')
            <div class="login-section account-section">
                <form wire:submit.prevent="register">
                    <div class="review-form">
                        <h5 class="comment-title">Create Account</h5>
                        <div class=" account-inner-form">
                            <div class="review-form-name">
                                <label for="full_name" class="form-label">Full Name*</label>
                                <input type="text" id="full_name"
                                    class="form-control @error('full_name') is-invalid @enderror" placeholder="Full Name" wire:model="full_name">
                                @error('full_name')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="account-inner-form">
                            <div class="review-form-name">
                                <label for="email" class="form-label">Email*</label>
                                <input type="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="user@gmail.com" wire:model="email">
                                @error('email')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="account-inner-form">
                            <div class="review-form-name">
                                <label for="phone" class="form-label">Phone*</label>
                                <input type="tel" id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="+04XXXXXXXXXX" wire:model="phone">
                                @error('phone')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="account-inner-form">
                            <div class="review-form-name">
                                <label for="password" class="form-label">Password*</label>
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password" wire:model="password">
                                @error('password')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="account-inner-form">
                            <div class="review-form-name">
                                <label for="confirm_password" class="form-label">Confirm Password*</label>
                                <input type="password" id="confirm_password"
                                    class="form-control @error('confirm_password') is-invalid @enderror"
                                    placeholder="Enter Same Password" wire:model="confirm_password">
                                @error('confirm_password')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="login-btn text-center">
                            <button type="submit" class="shop-btn">Create an Account</button>
                            <span class="shop-account">Already have an account ?<a href="{{ route('login') }}">Log In</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
