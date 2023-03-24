<?php

$json = '[
  {
    "id": 351110205,
    "nome": "Catanduva",
    "municipio": {
      "id": 3511102,
      "nome": "Catanduva",
      "microrregiao": {
        "id": 35005,
        "nome": "Catanduva",
        "mesorregiao": {
          "id": 3501,
          "nome": "São José do Rio Preto",
          "UF": {
            "id": 35,
            "sigla": "SP",
            "nome": "São Paulo",
            "regiao": {
              "id": 3,
              "sigla": "SE",
              "nome": "Sudeste"
            }
          }
        }
      },
      "regiao-imediata": {
        "id": 350026,
        "nome": "Catanduva",
        "regiao-intermediaria": {
          "id": 3507,
          "nome": "São José do Rio Preto",
          "UF": {
            "id": 35,
            "sigla": "SP",
            "nome": "São Paulo",
            "regiao": {
              "id": 3,
              "sigla": "SE",
              "nome": "Sudeste"
            }
          }
        }
      }
    }
  }
]';

$array = json_decode($json, true);

echo $array[0]['nome']; // Saída: Catanduva
echo $array[0]['municipio']['microrregiao']['nome']; // Saída: Catanduva

?>
