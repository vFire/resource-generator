{{ ucwords($request['relation']) }}::make('{{ str_singular(ucwords( camel_case($request['related_table']))) }}')