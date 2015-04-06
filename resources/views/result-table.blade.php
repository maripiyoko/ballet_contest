<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>観点</th>
              @foreach ( $contest->viewpoints as $viewpoint )
                <th colspan="{{ count($viewpoint->judges()) }}">{{ $viewpoint->name }}</th>
              @endforeach
            </tr>
            <tr>
              <th>審査員</th>
              @foreach ( $contest->viewpoints as $viewpoint )
                @foreach ( $viewpoint->judges() as $j )
                <th>{{ $j->name }}</th>
                @endforeach
              @endforeach
            </tr>
          </thead>
          @foreach ( $group->players as $player )
            <tr>
              <th rowspan="2">{{ $player->name }}</th>
              @foreach( $contest->viewpoints as $viewpoint)
                @foreach ( $viewpoint->judges() as $j )
                <td class="text-right">
                  {{-- */$score = $contest->score($j->id, $viewpoint->id, $player->id) /* --}}
                  @if( isset($score) )
                  {{ $score->score }}
                  @endif
                </td>
                @endforeach
              @endforeach
            </tr>
            <tr>
              @foreach( $contest->viewpoints as $viewpoint)
              <td class="text-right" colspan="{{ count($viewpoint->judges()) }}">
                {{ intval($viewpoint->sumupScores($player->id)) }}
              </td>
              @endforeach
            </tr>
          @endforeach
          </table>
