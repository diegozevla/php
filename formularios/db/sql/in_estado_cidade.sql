select *
from estados
inner join cidades
on cidades.codigo_estado = estados.codigo;