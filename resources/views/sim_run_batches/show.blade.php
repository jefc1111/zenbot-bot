<x-layout>
    <h2>Sim run batch {{ $batch->id }}</h2>
    {{ $batch->name }}<br>
    {{ $batch->info }}<br>
    {{ $batch->product->name }}<br>
    {{ $batch->exchange->name }}<br>
    {{ $batch->start }}<br>
    {{ $batch->end }}<br>
    {{ $batch->buy_pct }}<br>
    {{ $batch->sell_pct }}<br>
    <h3>Sim runs</h3>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Strategy</th>                
                <th>cmd</th>
            </tr>
        </thead>
        <tbody>
            @foreach($batch->sim_runs as $sim_run)
            <tr>
                <td>{{ $sim_run->id }}</id>
                <td>{{ $sim_run->strategy->name }}</id>
                <td>{{ $sim_run->cmd() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</x-layout>