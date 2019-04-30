      <tr><td colspan="3" class="text-center"><h3>Treino A</h3></td></tr>
      @foreach($treino as $exercicio)
        <tr>
          <td scope="row"> <input type="checkbox" aria-label="Checkbox for following text input" style="border: 1px solid #D9E0E6"> {{$exercicio->exercicio->titulo}} 
              <!-- Button trigger modal -->
              <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-xl" style="border-radius: 20%">
                <i class="fa fa-play-circle-o playicon" aria-hidden="true" style="font-size: 25px"></i>
              </button>

            </td>
          <td class="text-center">{{$exercicio->series}} x {{$exercicio->repeticoes}}</td>
          <td class="text-center">{{$exercicio->peso}} Kg</td>
        </tr>
      @endforeach