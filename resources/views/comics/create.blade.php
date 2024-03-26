<form action="{{ route('comics.store') }}" method="POST">
    @csrf

    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" />

    <label for="description" class="form-label">Descrizione</label>
    <textarea
    class="form-control"
    id="description"
    name="description"
    rows="4"
    ></textarea>

    <label for="price" class="form-label">Prezzo</label>
    <input type="number" class="form-control" id="price" name="price" />
    
    <label for="series" class="form-label">Serie</label>
    <input type="text" class="form-control" id="series" name="series" />
    
    <label for="thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" id="thumb" name="thumb" />

    <label for="saledate" class="form-label">Data di vendita</label>
    <input type="text" class="form-control" id="saledate" name="saledate" />
    
    <label for="type" class="form-label">Tipo</label>
    <select class="form-select" id="type" name="type">
        <option value="lunga">Comic book</option>
        <option value="corta">Graphic novel</option>
    </select>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>