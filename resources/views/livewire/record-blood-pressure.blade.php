<div class="my-10 flex justify-center w-full">
    <section class="border rounded shadow-lg p-4 w-6/12 bg-gray-100">
        <h1 class="text-center text-3xl my-5">Enter Blood Pressure Data</h1>
        <hr>
        <div>
            @if (session()->has('message'))
                <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <form class="my-4" wire:submit.prevent="submit">
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="number" class="p-2 rounded border shadow-sm w-full" wire:model="form.patient_id"
                        placeholder="Patient ID" />
                    @error('form.patient_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="number" class="p-2 rounded border shadow-sm w-full" wire:model="form.sbp"
                        placeholder="Systolic Blood Pressure (SBP)" />
                    @error('form.sbp') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="number" class="p-2 rounded border shadow-sm w-full" wire:model="form.dbp"
                        placeholder="Diastolic blood pressure (DBP)" />
                    @error('form.dbp') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
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