<x-header>
<x-slot:title>Registered Users</x-slot:title>
<div>
     Order your soul. Reduce your wants. - Augustine 
     <table class="table table-striped">
        @php $n =1 @endphp
         @foreach($users as $key)
            <tr>
                <td>{{ $loop->iteration }}</td>    
                <td>{{ $key->name }}</td>    
                <td>{{ $key->email }}</td>    
                <td>{{ $key->created_at }}</td>    
                  
            </tr> 
         @endforeach
        </table>
</div>
</x-header>