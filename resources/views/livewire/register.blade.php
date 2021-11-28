<div class="my-10 flex justify-center w-full">
    <section class="border rounded shadow-lg p-4 w-6/12 bg-gray-100">
        <h1 class="text-center text-3xl my-5">Sign Up</h1>
        <hr>
        <form class="my-4" wire:submit.prevent="submit">
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="name" class="p-2 rounded border shadow-sm w-full" wire:model="form.name"
                        placeholder="Name" name="name" />
                    @error('form.name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="email" class="p-2 rounded border shadow-sm w-full" placeholder="Email"
                        wire:model="form.email" name="email" />
                    @error('form.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="password" class="p-2 rounded border shadow-sm w-full" placeholder="Password"
                        wire:model="form.password" name="password"/>
                    @error('form.password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="password" class="p-2 rounded border shadow-sm w-full" placeholder="Confirm Password"
                        wire:model="form.password_confirmation" name="passwordc" />
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="submit" value="Register"
                        class="p-2 bg-gray-800 text-white w-full rounded tracking-wider cursor-pointer" dusk="register-button" />
                </div>
            </div>
        </form>
    </section>
</div>