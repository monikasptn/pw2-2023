<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/
	function kelulusan($nilaiuts, $nilaiuas, $nilaitugas){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		$totalnilai = $nilaiuts + $nilaiuas + $nilaitugas;
		$ratarata = $totalnilai / 3;

		return $ratarata;

		if ($ratarata > 55) {
			return "Lulus";
		} else {
			return "Tidak Lulus";
		}
	}

	function rerata($nilaiuts, $nilaiuas, $nilaitugas){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
		$totalnilai = $nilaiuts + $nilaiuas + $nilaitugas;
		$ratarata = $totalnilai / 3;

		if ($ratarata > 55) {
			return "Lulus";
		} else {
			return "Tidak Lulus";
		}
	}
	
	function grade($kelulusan){
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/
		if ($kelulusan <= 100) {
			return 'A';
		} elseif ($kelulusan <= 84) {
			return 'B';
		} elseif ($kelulusan <= 69) {
			return 'C';
		} elseif ($kelulusan <= 55) {
			return 'D';
		} elseif ($kelulusan <= 35) {
			return 'E';
		} else {
			return 'I';
		}
	}
	
	function predikat($kelulusan){
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/
		switch (grade($kelulusan)) {
			case 'A': 
				return 'Sangat Memuaskan';
				break;
			case 'B':
				return 'Memuaskan';
				break;
			case 'C':
				return 'Cukup';
				break;
			case 'D':
				return 'Kurang';
				break;
			case 'E':
				return 'Sangat Kurang';
				break;
			default :
				return 'Tidak Ada';
				break;
		}
	}
?>