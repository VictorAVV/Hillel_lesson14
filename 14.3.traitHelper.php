<?php
/**
 * 3. Реализуйте класс Country (страна) 
 * со свойствами name (название), age (возраст), population(количество населения) 
 * и геттерами для них. 
 * Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper (в примерах презентации).
 */

trait Helper
{
    private $name;
	private $age;
	
	public function getName()
	{
		return $this->name;
    }
    public function getAge()
	{
		return $this->age;
	}
}

class Country
{
    use Helper;

    private $population;

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
    public function getPopulation()
	{
		return $this->population;
	}
}

$country1 = new Country('France', 1200, 66991000);
echo 'Name: ' . $country1->getName();
echo '<br>';
echo 'Age: ' . $country1->getAge();
echo '<br>';
echo 'Population: ' . $country1->getPopulation();
