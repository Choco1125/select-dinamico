<div>
    <div class="my-1">
        <label for="competencia">Selecciona una competencia :</label>
        <select name="competencia" class="rounded-lg py-2 px3 w-full border-black" wire:model="selected"
            wire:change="$emit('searchHouses')">
            @foreach ($competencias as $competencia)
                <option value="{{ $competencia->id }}">
                    ({{ $competencia->codigo }})
                    {{ $competencia->name }} {{ $competencia->version }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="my-1">
        <label for="resultado">Selecciona un resultado :</label>
        <select name="resultado" class="rounded-lg py-2 px3 w-full border-black">
            @foreach ($resultados as $resultado)
                <option value="{{ $resultado->id }}">
                    {{ $resultado->nombre }}
                </option>
            @endforeach
        </select>
    </div>
</div>
