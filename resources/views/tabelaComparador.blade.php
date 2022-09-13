  <div class="row">
          <div class="table-rep-plugin">
            <div class="table-responsive table-bordered mb-0">
              <table id="1" class="table table-striped">
             
                <tbody>

                  @php
                    $grupoSimilar = 0;
                  @endphp
                  @foreach ($dadosUsuario as $item)
                    
                    @php
                      $grupoSimilarTemp = $item['cd_gr_similares'];
                    @endphp

                    @if ($grupoSimilar!=$grupoSimilarTemp)
                    <thead>
                        <tr>
                       
                          <th data-priority="1">Class.</th>
                          

                          @if ($item['label_vl_extra_1']!=0)
                          <th data-priority="1"> {{ $item['label_vl_extra_1']}} </th>
                          @endif
                          @if ($item['label_vl_extra_2']!=0)
                          <th data-priority="1"> {{ $item['label_vl_extra_2']}} </th>
                          @endif
                          
                          <th data-priority="3"> {{ $item['label_vl_lcto']}}  </th>
                          <th data-priority="3">Pts</th>
                         
                        </tr>
                      </thead> 
                    @endif

                    <tr>
               
                    <td>
                      {{$item['ordem']}}º
                      {{-- <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i> --}}
                    </td>

                    @if ($item['label_vl_extra_1']!=0)
                    <td> 
                      @if ($item['sufixo_1']!=null) {{-- caso tenha sufixo (porcentagem) --}}
                      {{$item['vl_extra_1']*100}}{{$item['sufixo_1']}}
                      @else
                      {{$item['prefixo_1']}}{{ number_format( $item['vl_extra_1'], 0, ',', '.')}} 

                      @endif
                  
                    </td>  
                  @endif

                        @if ($item['label_vl_extra_2']!=0)
                          <td> 
                            @if ($item['sufixo_2']!=null) {{-- caso tenha sufixo (porcentagem) --}}
                            {{$item['vl_extra_2']*100}}{{$item['sufixo_2']}}
                            @else
                            {{$item['prefixo_2']}}{{ number_format( $item['vl_extra_2'], 0, ',', '.')}} 

                            @endif
                        
                          </td>  
                        @endif

                    
                    

                    <td>
                      @if ($item['sufixo']!=null) {{-- caso tenha sufixo (porcentagem) --}}
                      {{$item['vl_lcto']*100}}{{$item['sufixo']}}
                      @else {{-- caso nao tenha sufixo (cifrao) --}}
                      {{$item['prefixo']}}{{ number_format($item['vl_lcto'], 0, ',', '.')}}
                      @endif

                    </td>
                    
                    <td> {{$item['pontuacao']}} </td>
                   
                    </tr>
                    @php
                
                    $grupoSimilar=$item['cd_gr_similares']
                    @endphp
                  
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>