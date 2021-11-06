<div class="my-10 flex justify-center w-full">
    <section class="border rounded shadow-lg p-4 w-6/12 bg-gray-100">
        <h1 class="text-center text-3xl my-5">New Patient</h1>
        <hr>
        <div>
            @if (session()->has('message'))
                <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <form class="my-4" wire:submit.prevent="submit" novalidate>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="name" class="p-2 rounded border shadow-sm w-full" wire:model="form.name"
                        placeholder="Patient Name" />
                    @error('form.name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="email" class="p-2 rounded border shadow-sm w-full" placeholder="Patient Email"
                        wire:model="form.email" />
                    @error('form.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                
               
                <div class="flex flex-wrap w-10/12 ">
                <label for="dob">Date of birth</label>
                    <input type="date" class="p-2 rounded border shadow-sm w-full" wire:model="form.date_of_birth"/> 
                    @error('form.date_of_birth') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <textarea class="p-2 rounded border shadow-sm w-full" placeholder="Additional Details"
                        wire:model="form.patient_details" ></textarea>
                    @error('form.patient_details') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="submit" value="Submit"
                        class="p-2 bg-gray-800 text-white w-full rounded tracking-wider cursor-pointer" />
                </div>
            </div>
        </form>
    </section>
</div>