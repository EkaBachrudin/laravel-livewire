<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    @livewire('contact-create')
    <ul>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>.</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>
                            <button class="btn btn-sm btn-info text-white">Edit</button>
                            <button class="btn btn-sm btn-danger text-white">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
</div>
