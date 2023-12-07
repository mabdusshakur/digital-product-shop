<div>
    <section class="login account footer-padding">
        <div class="container">
            @include('livewire.user.partials._alerts')
            <div class="login-section account-section">
                <form wire:submit.prevent="login">
                    <div class="review-form">
                        <h5 class="comment-title">Login</h5>
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
                                <label for="password" class="form-label">Password*</label>
                                <input type="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    wire:model="password">
                                @error('password')
                                    <span class="invalid-feedback"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="login-btn text-center">
                            <button type="submit" class="shop-btn">Login</button>
                            <span class="shop-account">New User ?<a href="{{ route('register') }}">Register</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
