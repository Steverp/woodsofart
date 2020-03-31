<?php

namespace App\Controller;

use App\Document\Category;
use App\Document\City;
use App\Document\Department;
use App\Document\Profile;
use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    private $dm;

    // Se accede al repositorio
    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    public function generateDocs()
    {
        try {
            $this->department();
            $response = $this->city();
            return new JsonResponse(array('Status' => $response->getContent()));
        } catch (Exception $ex) {
            return new JsonResponse(array('Status' => $ex->getMessage()));
        }
    }

    public function category()
    {
        try {
            $category = new Category();
            $category->setCategoryName('libros');
            $this->dm->persist($category);
            $this->dm->flush();
        } catch (Exception $ex) {
            
        }
    }

    public function profile()
    {
        try {
            $profile = new Profile();
            $profile->setProfileName('ADMIN');
            $this->dm->persist($profile);
            $this->dm->flush();
            return new JsonResponse(array('Status' => 'departamento guardado'));
        } catch (Exception $ex) {
            throw new Exception("Error generando el departamento", $ex);
        }
    }

    public function department()
    {
        try {
            $department = new Department();
            $department->setDepartmentName('cundinamarca');
            $department->setDaneCode('123-643');
            $this->dm->persist($department);
            $this->dm->flush();
            return new JsonResponse(array('Status' => 'departamento guardado'));
        } catch (Exception $ex) {
            throw new Exception("Error generando el departamento", $ex);
        }
    }

    public function city()
    {
        
            $department = $this->dm->getRepository(Department::class)->findOneBy(['departmentName' => 'cundinamarca']);
            $city = new City();
            $city->setDepartmentId($department);
            $city->setCityName('bogota');
            $city->setDaneCode('123-64334');
            $this->dm->persist($city);
            $this->dm->flush();
            return new JsonResponse(array('Status' => 'ciudad guardada con departamento '.$city->getDepartmentId()->getDepartmentName()));
        
    }

    public function user()
    {
        try {
            $user = new User();
            $user->setProfileId('PRUEBA');
            $user->setCityId('PRUEBACIUDAD');
            $user->setUsername('123-643');
            $user->setPhone('123-643');
            $user->setAddress('123-643');
            $user->setPseudonym('123-643');
            $user->setPresentation('123-643');
            $user->setEmail('123-643');
            $user->setAge('123-643');
            $user->setZipCode('123-643');
            $this->dm->persist($user);
            $this->dm->flush();
            return new JsonResponse(array('Status' => 'departamento guardado'));
        } catch (Exception $ex) {
            return new JsonResponse(array('Status' => $ex->getMessage()));

        }
    }
}
