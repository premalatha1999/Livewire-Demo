<div>
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="float-right mt-5">
                <input wire:model="search" class="form-control" type="text" placeholder="Search Users...">
            </div>
        </div>
    </div>
    <div class="row">
        @if (!empty($users))
            <table class="table" style="border: 1px solid black;">
                <thead>
                <tr style="border: 1px solid black;">
                    <th style="border: 1px solid black;">
                        <a wire:click.prevent="sortBy('name')" role="button" href="#">
                            Name
                        </a>
                    </th>
                    <th style="border: 1px solid black;">
                        <a wire:click.prevent="sortBy('email')" role="button" href="#">
                            Email
                        </a>
                    </th>
                    <th style="border: 1px solid black;">
                        <a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                            Created at
                        </a>
                    </th>
                    <th style="border: 1px solid black;">
                        Delete
                    </th>
                    <th style="border: 1px solid black;">
                        Edit
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black;">{{ $user->name }}</td>
                        <td style="border: 1px solid black;">{{ $user->email }}</td>
                        <td style="border: 1px solid black;">{{ $user->created_at}}</td>
                        <td style="border: 1px solid black;">
                            <button class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </td>
                        <td style="border: 1px solid black;">
                            <button class="btn btn-sm btn-dark">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning">
                Your query returned zero results.
            </div>
        @endif
    </div>
</div>
