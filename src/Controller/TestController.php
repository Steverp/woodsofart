<?php

namespace App\Controller;

use App\Document\Category;
use App\Document\City;
use App\Document\Comment;
use App\Document\Department;
use App\Document\Editorial;
use App\Document\Exposition;
use App\Document\ExpositionType;
use App\Document\Invoice;
use App\Document\PlanType;
use App\Document\Play;
use App\Document\PlayType;
use App\Document\Profile;
use App\Document\Sale;
use App\Document\User;
use App\Document\UserPlan;
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
            $this->category();
            $this->department();
            $this->city();
            //----
            $this->profile();
            $this->user();
            //----
            $this->editorial();
            $this->playType();
            $this->play();
            $this->comment();
            //----
            $this->expositionType();
            $this->exposition();
            //---
            $this->planType();
            $this->userPlan();

            //---
            $this->sale();
            $this->invoice();


            return new JsonResponse(array('Status' => 'documentos generados con éxito'));
        } catch (Exception $ex) {
            return new JsonResponse(array('Status' => $ex->getMessage()));
        }
    }

    public function category()
    {
        $category = new Category();
        $category->setCategoryName('generico');
        $this->dm->persist($category);
        $this->dm->flush();

    }


    public function department()
    {
        $department = new Department();
        $department->setDepartmentName('generico');
        $department->setDaneCode('generico');
        $this->dm->persist($department);
        $this->dm->flush();
    }

    public function city()
    {
        
        $department = $this->dm->getRepository(Department::class)->findOneBy(['departmentName' => 'generico']);
        $city = new City();
        $city->setDepartmentId($department);
        $city->setCityName('generico');
        $city->setDaneCode('generico');
        $this->dm->persist($city);
        $this->dm->flush();
        //  return new JsonResponse(array('Status' => 'ciudad guardada con departamento '.$city->getDepartmentId()->getDepartmentName()));
    
    }

    public function profile()
    {
        $profile = new Profile();
        $profile->setProfileName('generico');
        $this->dm->persist($profile);
        $this->dm->flush();
       // return new JsonResponse(array('Status' => 'departamento guardado'));

    }

    public function user()
    {
        $city = $this->dm->getRepository(City::class)->findOneBy(['cityName' => 'generico']);
        $profile = $this->dm->getRepository(Profile::class)->findOneBy(['profileName' => 'generico']);

        $user = new User();
        $user->setProfileId($profile);
        $user->setCityId($city);
        $user->setUsername('generico');
        $user->setPhone('generico');
        $user->setAddress('generico');
        $user->setPseudonym('generico');
        $user->setPresentation('generico');
        $user->setEmail('generico');
        $user->setAge('generico');
        $user->setZipCode('generico');
        $this->dm->persist($user);
        $this->dm->flush();
    }


    public function editorial()
    {
        $editorial = new Editorial();
        $editorial->setEditorialName('generico');
        $this->dm->persist($editorial);
        $this->dm->flush();
    }

    public function playType()
    {
        $playType = new PlayType();
        $playType->setPlayName('generico');
        $this->dm->persist($playType);
        $this->dm->flush();
    }

    public function play()
    {
        $user = $this->dm->getRepository(User::class)->findOneBy(['userName' => 'generico']);
        $editorial = $this->dm->getRepository(Editorial::class)->findOneBy(['editorialName' => 'generico']);
        $playType = $this->dm->getRepository(PlayType::class)->findOneBy(['playName' => 'generico']);

        $play = new Play();
        $play->setUserId($user);
        $play->setEditorialId($editorial);
        $play->setPlayTypeId($playType);
        $play->setTitle('generico');
        $play->setDescription('generico');
        $play->setPrice('2050.0');
        $this->dm->persist($play);
        $this->dm->flush();
    }

    public function comment()
    {
        $user = $this->dm->getRepository(User::class)->findOneBy(['userName' => 'generico']);
        $play = $this->dm->getRepository(Play::class)->findOneBy(['description' => 'generico']);
        $Comment = new Comment();
        $Comment->setContent('generico');
        $Comment->setPlayId($play);
        $Comment->setUserId($user);
        $this->dm->persist($Comment);
        $this->dm->flush();
    }

    public function expositionType()
    {
        $expositionType = new ExpositionType();
        $expositionType->setExpositionName('generico');
        $expositionType->setDescription('generico');
        $this->dm->persist($expositionType);
        $this->dm->flush();
    }

    public function exposition()
    {
        $expositionType = $this->dm->getRepository(ExpositionType::class)->findOneBy(['expositionName' => 'generico']);
        $exposition = new Exposition();
        $exposition->setExpositionTypeId($expositionType);
        $exposition->setDescription('generico');
        $exposition->setExpositionDate('2016-05-18T16:00:00Z');
        $this->dm->persist($exposition);
        $this->dm->flush();
    }

    public function planType()
    {
        $planType = new PlanType();
        $planType->setplanName('generico');
        $planType->setDescription('generico');
        $planType->setValue('25052.00');
        $this->dm->persist($planType);
        $this->dm->flush();
    }


    public function userPlan()
    {
        $user = $this->dm->getRepository(User::class)->findOneBy(['userName' => 'generico']);
        $planType = $this->dm->getRepository(PlanType::class)->findOneBy(['planName' => 'generico']);

        $userPlan = new UserPlan();
        $userPlan->setUserId($user);
        $userPlan->setPlanTypeId($planType);
        $userPlan->setPlanName('generico');
        $userPlan->setDescription('generico');
        $userPlan->setStartingDate('2016-05-18T16:00:00Z');
        $userPlan->setTerminationDate('2016-05-18T16:00:00Z');
        $userPlan->setLastPaymentDate('2016-05-18T16:00:00Z');
        $userPlan->setPaymentType('0');
        $this->dm->persist($userPlan);
        $this->dm->flush();
    }


    public function sale()
    {
        $user = $this->dm->getRepository(User::class)->findOneBy(['userName' => 'generico']);

        $sale = new Sale();
        $sale->setUserId($user);
        $sale->setTotalValue('0.0');
        $sale->setTotalItems('0');
        $this->dm->persist($sale);
        $this->dm->flush();
    }


    public function invoice()
    {
        $sale = $this->dm->getRepository(Sale::class)->findOneBy(['totalItems' => '0']);
        $play = $this->dm->getRepository(Play::class)->findOneBy(['playName' => 'generico']);

        $invoice = new Invoice();
        $invoice->setSaleId($sale);
        $invoice->setPlayId($play);
        $invoice->setTotalPrice('0.0');
        $invoice->setQuantity('0');
        $this->dm->persist($invoice);
        $this->dm->flush();
    }


}
