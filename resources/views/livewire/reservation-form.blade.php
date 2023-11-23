<form wire:submit.prevent="saveReservation">

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <input type="text" class="form-control"
               placeholder="Your Name"
               wire:model="name"/>
    </div>
    <div>
        <input type="text" class="form-control" placeholder="Phone Number" wire:model="phone_number"/>
    </div>
    <div>
        <input type="email" class="form-control" placeholder="Your Email" wire:model="email"/>
    </div>
    <div>
        <select class="form-control nice-select wide" wire:model="number_of_people">
            <option value="" disabled selected>
                How many persons?
            </option>
            <option value="2">
                2
            </option>
            <option value="3">
                3
            </option>
            <option value="4">
                4
            </option>
            <option value="5">
                5
            </option>
        </select>
    </div>
    <div>
        <input type="date" class="form-control" wire:model="reservation_date">
    </div>
    <div class="btn_box">
        <button type="submit">
            Book Now
        </button>
    </div>
</form>
