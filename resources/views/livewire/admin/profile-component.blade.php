<div>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">USER INFORMATION</h6>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" wire:submit.prevent="updateInformation">
                                <div class="col-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Name" wire:model="name">
                                    @error('name')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" wire:model="email">
                                    @error('email')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Phone</label>
                                    <input type="tel"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        placeholder="Phone" wire:model="phone_number">
                                    @error('phone_number')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">Change Password</h6>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" wire:submit.prevent="updatePassword">
                                <div class="col-12">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Current Password" wire:model="password">
                                    @error('password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="New Password" wire:model="password">
                                    @error('password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password"
                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                        placeholder="Confirm Password" wire:model="confirm_password">
                                    @error('confirm_password')
                                        <span class="invalid-feedback"> {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary px-4">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <form wire:submit.prevent="updateProfileImage">
                        <div class="profile-avatar text-center">
                            <img src="assets/images/avatars/avatar-1.png" class="rounded-circle shadow" width="120"
                                height="120" alt="">
                        </div>
                        <hr>
                        <div class="text-center mt-4 mb-2 col-md-12">
                            <label class="form-label">Profile Image</label>
                            <input class="form-control  @error('profile_image') is-invalid @enderror" type="file"
                                wire:model="profile_image">
                            @error('profile_image')
                                <span class="invalid-feedback"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary px-4">Update Photo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
