<?php 
	
	class resq	{
		private $id;
		private $oname;
		private $email;
		private $phoneno;
		private $gname;
		private $address;
		private $token;
		private $date;
		private $activated;
		private $lat;
		private $lng;
		private $conn;
		private $tableName = "register_garage";

		function setId($id) { $this->id = $id; }
		function getId() { return $this->id; }

		function setOname($oname) { $this->oname = $oname; }
		function getOname() { return $this->oname; }

		function setEmail($email) { $this->email = $email; }
		function getEmail() { return $this->email; }

		function setPhoneno($phoneno) { $this->phoneno = $phoneno; }
		function getPhoneno() { return $this->phoneno; }

		function setGname($gname) { $this->gname = $gname; }
		function getGname() { return $this->gname; }

		function setAddress($address) { $this->address = $address; }
		function getAddress() { return $this->address; }

		function setToken($token) { $this->token = $token; }
		function getToken() { return $this->token; }

		function setDate($date) { $this->date = $date; }
		function getDate() { return $this->date; }

		function setActivated($activated) { $this->activated = $activated; }
		function getActivated() { return $this->activated; }

		function setLat($lat) { $this->lat = $lat; }
		function getLat() { return $this->lat; }

		function setLng($lng) { $this->lng = $lng; }
		function getLng() { return $this->lng; }

		public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getregister_garageBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE lat IS NULL AND lng IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllregister_garage() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateregister_garageWithLatLng() {
			$sql = "UPDATE $this->tableName SET lat = :lat, lng = :lng WHERE id = :id";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':lat', $this->lat);
			$stmt->bindParam(':lng', $this->lng);
			$stmt->bindParam(':id', $this->id);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>